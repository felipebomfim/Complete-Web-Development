<?php
    //Facade
    //Facade Pattern


	///////
	//Adicionar/Fechar Carrinho - Carrinho
	//Calcular Frete - Frete
	//Fechar Pedido - Pedido

	class Carrinho{
		public function fecharCarrinho(){
			echo 'carrinho fechado';
		}
	}

	class Frete{
		public function calcularFrete(){

		}
	}

	class Pedido{
		public function fecharPedido(){

		}
	}

	class Loja{
			public function finalizarCompra(){
				$this->fecharCarrinho();
				$this->calcularFrete();
				$this->fecharPedido();
			}

			public function fecharCarrinho(){
				$carrinho = new Carrinho();
				$carrinho->fecharCarrinho();
			}

	}

	$loja = new Loja();
	$loja->finalizarCompra();