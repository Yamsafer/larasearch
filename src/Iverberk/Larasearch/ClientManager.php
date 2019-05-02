<?php namespace Iverberk\Larasearch;

use Elasticsearch\Client;

class ClientManager
{
    public static function getClient($model)
    {
        if ($model->esVersion() === 6) {
            return new Client(\Illuminate\Support\Facades\Config::get('larasearch.elasticsearch.v6_params'));
        }

        return new Client(\Illuminate\Support\Facades\Config::get('larasearch.elasticsearch.default_params'));
    }
}
