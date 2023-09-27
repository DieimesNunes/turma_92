class Computador {
  String marca;
  String processador;
  int memoriaRAM;

  Computador(
      this.marca, this.processador, this.memoriaRAM); // Construtor padrão

  Computador.basicPC(this.marca) // Construtor nomeado
      : processador = 'Intel Core i3',
        memoriaRAM = 4;

  void executarPrograma() {
    print('Executando programa...');
  }
}

void main() {
  var computador1 = Computador('Dell', 'Intel Core i7', 16);
  computador1.executarPrograma(); // Deverá imprimir 'Executando programa...'

  var computador2 = Computador.basicPC('HP');
  computador2.executarPrograma(); // Deverá imprimir 'Executando programa...'
}
