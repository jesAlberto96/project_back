<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ResponseController as Response;
use App\Repositories\Client\ClientRepository;
use App\Repositories\Poll\PollRepository;
use App\Repositories\Poll\PollAnswerRepository;

class PollController extends Controller
{
    public function getQuestionByPollCode($code)
    {
        return Response::sendResponse(PollRepository::getTypePollByWhere(array(
            ['code', $code]
        )) ?? []);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $type_poll_id = $request->input('type_poll_id');
        $client = $request->input('client');
        $poll_answers = $request->input('poll_answers');

        $data_client = $this->saveClient($client);

        $data_poll = PollRepository::create(
            [
                "client_id" => $data_client->id,
                "hair_expert_id" => $client['hair_expert_id'],
                "type_poll_id" => $type_poll_id,
            ]
        );

        foreach ($poll_answers as $key => $value) {
            $question = PollRepository::getOneQuestionByWhere(array(
                ['name', $key]
            ));

            PollAnswerRepository::create(
                [
                    "poll_id" => $data_poll->id,
                    "question_id" => $question->id,
                    "type_poll_id" => $type_poll_id,
                    "hair_expert_id" => $client['hair_expert_id'],
                    "response" => $value,
                ]
            );
        }

        return Response::sendResponse($data_poll);
    }

    private function saveClient($client)
    {
        return ClientRepository::updateOrCreate(
            [
                "email" => $client['email']
            ],
            [
                "name" => $client['name'],
                "second_name" => $client['second_name'],
                "surname" => $client['surname'],
                "second_surname" => $client['second_surname'],
                "birth_date" => $client['birth_date'],
                "number_phone" => $client['number_phone'],
            ]
        );
    }
    
    private function savePoll($data)
    {
        return PollRepository::create(
            [
                "client_id" => $client['name'],
                "hair_expert_id" => $client['second_name'],
                "type_poll_id" => $client['surname'],
            ]
        );
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
