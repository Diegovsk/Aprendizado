import txt


while True:
    print("-"*40)
    print("\033[33mMENU PRINCIPAL\033[m".center(45))
    print("-"*40)
    print("\033[0:33m1 - \033[m", end='')
    print("\033[36mMostrar pessoas cadastradas\033[m")
    print("\033[0:33m2 - \033[m", end='')
    print("\033[36mCadastrar nova pessoa\033[m")
    print("\033[0:33m3 - \033[m", end='')
    print("\033[36mSair do sistema\033[m")

    op = int(input("\033[33mDigite sua opcão:\033[m "))

    if op == 1:
        txt.ler()
    elif op == 2:
        pessoa_nome = str(input("Digite o nome da pessoa: "))
        pessoa_idade = int(input("Digite a idade da pessoa: "))
        txt.escrever(pessoa_nome, pessoa_idade)
    elif op == 3:
        print("\033[31mParando a execução.")
        break
    else:
        print("\033[31mOpção inválida!\033[m")