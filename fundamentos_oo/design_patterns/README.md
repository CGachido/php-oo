Singleton:
É necessário compartilhar informações (pref, configs)
dentro de diferentes contextos (classe, metodos)
Como compartilhar uma única versão da verdade?
Singleon
Classe é visivel global;
Permite N objetos;
Limita a instanciação para instanciar 1 único objeto, não mais que 1.
Como limitar em apenas uma instancia?
Transformar o método construtor em privado
Instanciar a classe dentro da própria classe
Criar um método getInstace();
Retornar sempre a mesma instância

Facade (fachada)
Ajuda a diminuir o acoplamento
Oferece uma interface única para um conjunto de interfaces de um subsitema
Bom para isolar biblioteca de 3o, que tem evolução própria e queremos substituir por outras
Podendo ser um conjunto de classes

Adapter
Conceito de adaptação de interface
Favore o isolamento e manutenção;
Converter a interface de uma classe em outra;
Também conhecido como Wrapper;
Adapta uma classe (sistema já está acostumado a um formato e criamos essa ponte)

- Object Wrapper: Encapusla adaptado por composição
- Class Wrapper: Adapta interface por herança
