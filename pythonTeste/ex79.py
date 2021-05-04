lista = []
while True:
    opcao = str(input("Quer adicionar um número? [S/N]  ")).strip().upper()[0]
    if opcao == "N":
        print(sorted(lista))
        break
    if opcao == "S":
        num = int(input("Digite um número: "))
        if num in lista:
            print("Desculpe, mas este número está duplicado.")
        else:
            lista.append(num)
