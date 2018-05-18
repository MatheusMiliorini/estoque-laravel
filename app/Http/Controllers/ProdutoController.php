<?php
    namespace estoque\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class ProdutoController extends Controller {

        public function lista() {
            $produtos = DB::select('select * from produtos');
            return view('produto/listagem')->with('produtos',$produtos);
        }

        public function mostra($id) {
            $resposta = DB::select("SELECT * FROM produtos WHERE id=?",[$id]);
            return view ('produto/detalhes')->with("p",$resposta[0]);
        }

        public function novo() {
            return view ('produto/novo');
        }

        public function adiciona(Request $request) {
            $data = $request->all();
            $add = DB::insert("INSERT INTO produtos(nome,valor,descricao,quantidade) VALUES(?,?,?,?)",
                [$data['nome'],
                $data['valor'],
                $data['descricao'],
                $data['quantidade']]);
            
                if ($add) {
                    //COLOCAR ALGUMA COISA PRA MOSTRAR SE ADICIONOU OU NÃO!
                }
        }
    }
?>