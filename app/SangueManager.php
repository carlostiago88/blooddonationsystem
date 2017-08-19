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
              AND c.status = 1
              AND a.laboratorio_id = $laboratorio_id");
    }

    public function agendaLaboratorioCompleto($laboratorio_id, $doador_id)
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
              AND c.status = 1
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

    public function detalharBolsa($bolsa_id)
    {
        return DB::select(
            "SELECT

            b.bolsa_chave,

            u.name as nome_doador,

            d.user_id as doador_id,
            d.nascimento,
            d.fator_rh,
            d.tipo_sanguineo,
            d.sexo,
            d.documento,
            d.contato,

            l.id as lab_id,
            l.nome as nome_lab,

            tec.name as nome_tecnico,
            tec.id as tecnico_id


            FROM bolsas b
            INNER JOIN doadores d on d.user_id = b.doador_id
            INNER JOIN laboratorios l on l.id = b.laboratorio_id
            LEFT JOIN users tec on tec.id = b.tecnico_id
            LEFT JOIN users u on d.user_id = u.id
            WHERE
            b.bolsa_chave = '$bolsa_id' and b.status = 1");
    }

    public function atualizarBolsa($bolsa_chave)
    {

    }

    public function listarBolsasLab($lab_id)
    {
        return DB::select("SELECT
B.bolsa_chave,
B.created_at data_coleta,
D.fator_rh,
D.tipo_sanguineo,
D.sexo,
D.documento,
B.analise_biomedico

FROM AGENDAMENTOS A

INNER JOIN BOLSAS B ON A.ID = B.AGENDAMENTO_ID
INNER JOIN DOADORES D ON B.DOADOR_ID = D.USER_ID
WHERE B.STATUS = 1 AND B.LABORATORIO_ID = $lab_id");
    }
}
