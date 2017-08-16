<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SangueManager extends Model
{

    public function agendaLaboratorio($laboratorio_id)
    {
        return DB::select(
            "SELECT
                a.id,
                a.user_id as doador_id,
                a.data as data_doacao,
                upper(a.turno) as turno,
                a.created_at as dia_marcarcao,

                b.name as nome_doador,

                c.sexo,
                c.documento,
                c.nascimento
              FROM agendamentos a
              INNER JOIN users b on b.id = a.user_id
              INNER JOIN doadores c on c.user_id = a.user_id
              WHERE a.situacao = 'agendado'
              AND b.status = 1
              AND a.laboratorio_id = $laboratorio_id");
    }

    public function agendaLaboratorioCompleto($laboratorio_id,$doador_id)
    {
        return DB::select(
            "SELECT
                a.id,
                a.user_id as doador_id,
                a.data as data_doacao,
                upper(a.turno) as turno,
                a.created_at as dia_marcarcao,

                b.name as nome_doador,

                c.sexo,
                c.documento,
                c.nascimento
              FROM agendamentos a
              INNER JOIN users b on b.id = a.user_id
              INNER JOIN doadores c on c.user_id = a.user_id
              WHERE a.situacao = 'agendado'
              AND b.status = 1
              AND a.laboratorio_id = $laboratorio_id
              AND c.user_id = $doador_id");
    }

    public function detalheDoador($doador_id)
    {
        return DB::select(
            "SELECT
            d.user_id as doador_id,
            u.name as nome_doador,
            d.*,
            u.*
            FROM doadores d
            INNER JOIN users u on d.user_id = u.id
            WHERE
            d.user_id = $doador_id and d.status = 1");
    }
}
