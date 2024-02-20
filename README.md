# Teste-IN8
Sistema Desenvolvido para teste de Estágio que já se encontra hospedado no seguinte link: https://creativerocket.wuaze.com/index.php

O sistema proposto pela IN8 é de um site Landing Page que mostra algumas imagens e um cadastro funcional com a tabela exibindo a lista de pessoas cadastradas(eu chamei de candidatos).

# Tecnologias Utilizadas no projeto
O recrutador não exigiu uma tecnologia específica, então utilizei as tecnologias que tenho mais familiaridade que são:
  - Materialize CSS: Utilizo para facilitar o posicionamento de elementos, efeitos e estruturas responsivas, onde eu consigo ter um maior foco no desenvolvimento proposto pelo Design;
  - Jquery: Utilizo juntamente com o Materialize para manipulação dos elementos visuais da página;
  - PHP com PDO: Com ou sem Orientação a Objetos, utilizo o PHP com PDO para manipulação de dados diretamente de uma base de Dados existente, onde eu realizo facilmente as operações de CRUD;
  - Mysql: O Banco de dados que mais uso em meus projetos e com esse não foi diferente, já que a facilidade no uso e as melhores possibilidades com hospedagem fazem dele o meu favorito.
  - Servidor Apache: Pelo mesmo motivo do mysql, utilizo pela facilidade e maiores opções de hospedagem.

Poderia ter usado somente Wordpress com Elemntor PRO? Sim! O mesmo com NodeJS com React? Também! Ou talvez React + MongoDB + Express + CORS... A lista é enorme! Mas repito, o recrutador me deixou bem a vontade para usar o que eu tenho mais familiaridade em meus projetos pessoais e freelancers, então por isso não vi a necessidade de usar um canhão pra derrubar um palito, já que eu consigo o mesmo resultado com tecnologias que eu considero serem mais rápidas no desenvolvimento. Claro que em termos de padrões de projetos, eu não utilizei algum, pois meu foco foi entregar algo funcional o mais próximo da demanda possível.

# Estrutura de Diretórios
A estrutura de diretórios é bem simples de entender. O projeto possui 5 diretórios e 1 arquivo solto organizados da seguinte forma:

Diretório "conexao" que contém um único arquivo responsável por toda a conexao do código ao banco de dados.
  - conexao.php: Arquivo responsável pela configuração que conecta o código ao banco de dados, contendo a instância da Classe PDO e a chamada da função getConecxao() usada em todas as operações CRUD do sistema.

Diretório "controle" que armazena as operações CRUD do projeto.
  -  atualizar.php [UPDATE]
  -  deletar.php [DELETE]
  -  inserir.php [INSERT]
  -  mostrar.php [SELECT]

Diretório "css" que contém um único arquivo responsável por todo estilo específico proposto no teste.
  - style.css

Diretório "img" que contém todas as 5 imagens de qualquer tipo contidas em todo o projeto(Possui também uma imagem que não foi utilizada pois é apenas um modelo).

Diretório "js" que contém um único arquivo responsável pela lógica de manipulaçãovisual do site(Lógica do Front-end usando JQuery).
  - main.js

E por último, o principal arquivo desse projeto onde apresenta a Landing Page em si contendo o código HTML e que não faz parte de nenhum diretório.
  - index.php

# Banco de Dados
Como disse anteriormente o Banco de dados utilizado foi o Mysql contendo a seguinte estrutura:
  - Nome do Banco: testeestagio
  - Tabelas: possui apenas uma tabela chamada "candidato" com os campos id, nome, email, nascimento, telefone.

Deixei disponível o arquivo exportado da estrutura da tabela "candidato" junto aos arquivos do projeto(solto juntamente com o index.php).

# Como executar?
Por fim se você deseja executar o projeto localmente, basta ter o PHP executando em um servidor Apache e Banco de Dados Mysql(Wampp, Lampp, Xampp ou qual preferir).

No Gerenciador de Banco de dados(geralmente o phpMyAdmin) crie um banco de dados chamado "testeestagio" e nele Importe a tabela "candidato" que deixei disponível nos arquivos do projeto. 

Após isso crie um diretório com o nome que desejar dentro da pasta "htdocs" dos arquivos do Servidor Apache(pode ser "www", mas depende de qual kit de execução você instalou. Eu recomento o XAMPP). 

Agora com o Apache e o Mysql em execução, execute localmente o projeto! Para facilitar, caso prefira não seguir estes passos de execução, deixei o projeto hospedado neste link: https://creativerocket.wuaze.com/index.php

# Considerações finais
Agradeço pela oportunidade e espero poder fazer parte do time!
