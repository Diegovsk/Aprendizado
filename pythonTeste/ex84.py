lista = []
teste = []

while True:

    if sn == "N":
        teste.append(peso)
        lista.append(teste[:])
        print(teste)
        lista.clear()
        print(f'Os dados foram {lista}')
        print(lista)
        break

    elif sn == "S":
        nome = str(input("Digite o nome: "))
        teste.append(nome)
        peso = float(input("Digite o peso: "))




    else:
        print("Operação inválida.")
    sn = str(input("Deseja inserir um pessoa? [S/N] ")).strip().upper()[0]