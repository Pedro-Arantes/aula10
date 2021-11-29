*ANOTAÇOES DA AULA 10

obs:tuany tbcclientes

-lembrar sempre de criar um arquivo de conexao com o banco de dados

- method=Get - envia sem segurança pois exibe os dados na url porem e mais rapido.

-method=Post mais seguro porem mais lento.



tblprodutos:
-idproduto
-produto varchar 40
-preco float 10,2
-estoque int

tblvendedores:
-idvendedor
-vendedor varchar 40
-dataadmissao date
-salario float 10,2

tblvendas:
-idvendas
-idvendedor int
-idproduto int
-qtd int