<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('locais')->truncate();

        $localJson = '{
    "SP": [
      {
        "codigo": 1,
        "local": "Parque do Ibirapuera",
        "descricao": "O Parque do Ibirapuera é o mais importante parque urbano de São Paulo, com áreas verdes, museus, auditórios e pistas de corrida.",
        "endereco": "Av. Pedro Álvares Cabral - Vila Mariana, São Paulo - SP, 04094-050",
        "imagem": "/storage/SP/ibirapuera.jpeg"
      },
      {
        "codigo": 2,
        "local": "Mercado Municipal de São Paulo",
        "descricao": "O Mercado Municipal Paulistano é um grande mercado público localizado no centro histórico de São Paulo, conhecido por sua arquitetura e diversidade de produtos.",
        "endereco": "R. da Cantareira, 306 - Centro Histórico de São Paulo, São Paulo - SP, 01024-000",
        "imagem": "/storage/SP/mercado_municipal.jpeg"
      },
      {
        "codigo": 3,
        "local": "Avenida Paulista",
        "descricao": "A Avenida Paulista é uma das principais vias da cidade de São Paulo, conhecida por sua agitação cultural, arquitetura moderna, lojas, restaurantes e museus.",
        "endereco": "Av. Paulista, São Paulo - SP, 01310-100",
        "imagem": "/storage/SP/paulista.png"
      },
      {
        "codigo": 4,
        "local": "Museu de Arte de São Paulo (MASP)",
        "descricao": "O MASP é um dos mais importantes museus de arte do Brasil, localizado na Avenida Paulista, conhecido por sua arquitetura moderna e vasta coleção de arte.",
        "endereco": "Av. Paulista, 1578 - Bela Vista, São Paulo - SP, 01310-200",
        "imagem": "/storage/SP/masp.jpeg"
      },
      {
        "codigo": 5,
        "local": "Pinacoteca do Estado de São Paulo",
        "descricao": "A Pinacoteca do Estado de São Paulo é um dos mais importantes museus de arte do Brasil, com um acervo de obras brasileiras do século XIX até a contemporaneidade.",
        "endereco": "Praça da Luz, 2 - Luz, São Paulo - SP, 01120-010",
        "imagem": "/storage/SP/pinacoteca.jpeg"
      },
      {
        "codigo": 6,
        "local": "Catedral da Sé",
        "descricao": "A Catedral da Sé é uma das principais igrejas de São Paulo, conhecida por sua arquitetura gótica e por abrigar importantes eventos religiosos.",
        "endereco": "Praça da Sé - Sé, São Paulo - SP, 01001-000",
        "imagem": "/storage/SP/catedral_se.jpeg"
      },
      {
        "codigo": 7,
        "local": "Liberdade",
        "descricao": "O bairro da Liberdade é conhecido por abrigar a maior comunidade japonesa fora do Japão, com uma rica cultura oriental, lojas, restaurantes e festivais.",
        "endereco": "Bairro da Liberdade, São Paulo - SP, 01503-001",
        "imagem": "/storage/SP/liberdade.jpeg"
      },
      {
        "codigo": 8,
        "local": "Teatro Municipal de São Paulo",
        "descricao": "O Teatro Municipal é um dos mais importantes teatros e casas de espetáculos do Brasil, conhecido por sua arquitetura luxuosa e programação cultural diversificada.",
        "endereco": "Praça Ramos de Azevedo, s/n - República, São Paulo - SP, 01037-010",
        "imagem": "/storage/SP/teatro_municipal.jpeg"
      },
      {
        "codigo": 9,
        "local": "Parque da Independência",
        "descricao": "O Parque da Independência é um parque histórico localizado no bairro do Ipiranga, conhecido por abrigar o Museu do Ipiranga e o Monumento à Independência.",
        "endereco": "Av. Nazaré, s/n - Ipiranga, São Paulo - SP, 04263-000",
        "imagem": "/storage/SP/parque_da_independencia.jpeg"
      }

    ],
    "RJ": [
      {
        "codigo": 1,
        "local": "Cristo Redentor",
        "descricao": "O Cristo Redentor é um dos mais famosos pontos turísticos do Rio de Janeiro, localizado no topo do Morro do Corcovado, oferecendo uma vista deslumbrante da cidade.",
        "endereco": "Parque Nacional da Tijuca - Alto da Boa Vista, Rio de Janeiro - RJ, 22241-330",
        "imagem": "/storage/RJ/cristo_redentor.jpeg"
      },
      {
        "codigo": 2,
        "local": "Pão de Açúcar",
        "descricao": "O Bondinho do Pão de Açúcar é um teleférico localizado no Rio de Janeiro, que leva os visitantes ao topo do Morro do Pão de Açúcar, proporcionando uma vista panorâmica da cidade e da Baía de Guanabara.",
        "endereco": "Av. Pasteur, 520 - Urca, Rio de Janeiro - RJ, 22290-255",
        "imagem": "/storage/RJ/pao_de_acucar.jpeg"
      },
      {
        "codigo": 3,
        "local": "Jardim Botânico do Rio de Janeiro",
        "descricao": "O Jardim Botânico do Rio de Janeiro é um dos mais importantes jardins botânicos do Brasil, com uma vasta coleção de plantas tropicais e espécies nativas da Mata Atlântica.",
        "endereco": "Rua Jardim Botânico, 1008 - Jardim Botânico, Rio de Janeiro - RJ, 22460-000",
        "imagem": "/storage/RJ/jardim_botanico.jpeg"
      },
      {
        "codigo": 4,
        "local": "Maracanã",
        "descricao": "O Estádio do Maracanã é um dos estádios de futebol mais famosos do mundo, palco de importantes eventos esportivos e shows, localizado no bairro do Maracanã.",
        "endereco": "Av. Pres. Castelo Branco, Portão 3 - Maracanã, Rio de Janeiro - RJ, 20271-130",
        "imagem": "/storage/RJ/maracana.jpeg"
      },
      {
        "codigo": 5,
        "local": "Catedral Metropolitana do Rio de Janeiro",
        "descricao": "A Catedral Metropolitana do Rio de Janeiro é uma das principais igrejas da cidade, conhecida por sua arquitetura moderna em forma de cone e por abrigar obras de arte sacra.",
        "endereco": "Av. República do Chile, 245 - Centro, Rio de Janeiro - RJ, 20031-170",
        "imagem": "/storage/RJ/catedral.jpeg"
      },
      {
        "codigo": 6,
        "local": "Copacabana",
        "descricao": "A Praia de Copacabana é uma das praias mais famosas do mundo, conhecida por sua beleza natural, calçadão movimentado, quiosques e eventos culturais.",
        "endereco": "Av. Atlântica - Copacabana, Rio de Janeiro - RJ, 22070-000",
        "imagem": "/storage/RJ/copacabana.jpeg"
      },
      {
        "codigo": 7,
        "local": "Lapa",
        "descricao": "O bairro da Lapa é conhecido por sua intensa vida noturna, com bares, restaurantes, casas de show e pelo Arcos da Lapa, uma importante construção histórica.",
        "endereco": "Lapa, Rio de Janeiro - RJ, 20021-180",
        "imagem": "/storage/RJ/lapa.jpeg"
      },
      {
        "codigo": 8,
        "local": "Parque Lage",
        "descricao": "O Parque Lage é um parque público localizado aos pés do Morro do Corcovado, conhecido por sua exuberante natureza, trilhas, lagos e pelo Palácio Lage.",
        "endereco": "Rua Jardim Botânico, 414 - Jardim Botânico, Rio de Janeiro - RJ, 22461-000",
        "imagem": "/storage/RJ/parque_lage.jpeg"
      },
      {
        "codigo": 9,
        "local": "Museu de Arte do Rio (MAR)",
        "descricao": "O MAR é um museu dedicado à arte brasileira e internacional, localizado na Praça Mauá, com exposições temporárias e permanentes.",
        "endereco": "Praça Mauá, 5 - Centro, Rio de Janeiro - RJ, 20081-240",
        "imagem": "/storage/RJ/mar.jpeg"
      }

    ]
  }
  ';

        $locais = json_decode($localJson,true);
        foreach ($locais as $cidade => $locaisCidade) {
            foreach ($locaisCidade as $local) {
                DB::table('locais')->insert([
                    'cidade' => $cidade,
                    'local' => $local['local'],
                    'descricao' => $local['descricao'],
                    'endereco' => $local['endereco'],
                    'imagem' => $local['imagem'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
