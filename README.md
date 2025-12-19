# 💸 Conversor de Real para Dólar (API Banco Central)

Um projeto simples em PHP desenvolvido para converter valores de Real (BRL) para Dólar (USD) utilizando a cotação em tempo real fornecida pela API do Banco Central do Brasil.

## 🚀 Funcionalidades

* **Cotação Dinâmica**: Obtém automaticamente o valor da cotação de compra do dólar para o dia atual ou o último dia útil disponível.
* **Conversão Instantânea**: Calcula o valor correspondente em dólares com base na entrada do utilizador.
* **Formatação de Moeda**: Exibe os resultados formatados de acordo com os padrões monetários de Real e Dólar (BRL/USD).
* **Interface Responsiva**: Design moderno com gradientes e elementos estilizados via CSS.

## 🛠️ Tecnologias Utilizadas

* **PHP 8.x**: Processamento de dados e consumo da API.
* **HTML5 & CSS3**: Estrutura e estilização da interface.
* **API do Banco Central (Olinda)**: Fornecimento de dados oficiais de câmbio.

## 📂 Estrutura do Projeto

* `index.php`: Página inicial com o formulário para inserção do valor em Reais.
* `cad.php`: Script responsável por consultar a API, realizar o cálculo e exibir o resultado.
* `style.css`: Folha de estilos que define a identidade visual do projeto.

## ⚙️ Como Executar

1. Certifique-se de ter um servidor local (como XAMPP, WampServer ou o próprio PHP Built-in server) instalado.
2. Clone este repositório ou copie os ficheiros para a pasta do seu servidor (ex: `htdocs`).
3. Aceda ao projeto através do navegador (ex: `localhost/ConversorRealDolar/index.php`).
4. Insira o valor que deseja converter e clique em **"Ver em dólar"**.

## 📝 Notas Técnicas

O sistema utiliza a função `file_get_contents` para aceder ao endpoint da API PTAX do Banco Central e a classe `NumberFormatter` para garantir que a exibição dos valores respeite as normas internacionais de simbologia monetária.

---

**Desenvolvido por:** gbrielzera
