import random
#declarando variáveis
ope = str('Pedra')
opa = str('Papel')
opt = str('Tesoura')
lista_opcoes = [ope, opa, opt]
aleatorio = random.choice(lista_opcoes)

opcao_selecionada = str(input('Vamos fazer um jogo?\nDuvido você ganhar de mim no pedra, papel ou tesoura. '
                              '\nA primeira letra há de ser maiúscula e as seguintes minúsculas. \nDigite Pedra ou Papel ou Tesoura para selecionar: '))

opcao_selecionada.capitalize()

if opcao_selecionada == aleatorio:
    print('Oops, tirei o mesmo que você, empatamos. :| ')
    #Pedra
elif opcao_selecionada == ope and aleatorio == opa:
    print('Tirei {}, hehe, você perdeu! xD '.format(opa))
elif opcao_selecionada == ope and aleatorio == opt:
    print('Tirei {}, parabéns, você ganhou! :) '.format(opt))
    #Papel
elif opcao_selecionada == opa and aleatorio == ope:
    print('Tirei {}, parabéns, você ganhou! :)  '.format(ope))
elif opcao_selecionada == opa and aleatorio == opt:
    print('Tirei {}, hehe, você perdeu! xD '.format(opt))
    #Tesoura
elif opcao_selecionada == opt and aleatorio == opa:
    print('Tirei {}, parabéns, você ganhou! :)  '.format(opa))
elif opcao_selecionada == opt and aleatorio == ope:
    print('Tirei {}, hehe, você perdeu! xD '.format(ope))
else:
    print('Operação inválida, insira <Pedra>, <Papel> ou <Tesoura>, excluindo os <>')

continuar = str(input('Quer continuar a tentar? (s/n)\n'))

while continuar == 's':
    ope = str('Pedra')
    opa = str('Papel')
    opt = str('Tesoura')
    lista_opcoes = [ope, opa, opt]
    aleatorio = random.choice(lista_opcoes)

    opcao_selecionada = str(input('Vamos fazer um jogo?\nDuvido você ganhar de mim no pedra, papel ou tesoura. '
                                  '\nA primeira letra há de ser maiúscula e as seguintes minúsculas. \nDigite Pedra ou Papel ou Tesoura para selecionar: '))

    opcao_selecionada.capitalize()

    if opcao_selecionada == aleatorio:
        print('Oops, tirei o mesmo que você, empatamos. :| ')
        # Pedra
    elif opcao_selecionada == ope and aleatorio == opa:
        print('Tirei {}, hehe, você perdeu! xD '.format(opa))
    elif opcao_selecionada == ope and aleatorio == opt:
        print('Tirei {}, parabéns, você ganhou! :) '.format(opt))
        # Papel
    elif opcao_selecionada == opa and aleatorio == ope:
        print('Tirei {}, parabéns, você ganhou! :)  '.format(ope))
    elif opcao_selecionada == opa and aleatorio == opt:
        print('Tirei {}, hehe, você perdeu! xD '.format(opt))
        # Tesoura
    elif opcao_selecionada == opt and aleatorio == opa:
        print('Tirei {}, parabéns, você ganhou! :)  '.format(opa))
    elif opcao_selecionada == opt and aleatorio == ope:
        print('Tirei {}, hehe, você perdeu! xD '.format(ope))
    else:
        print('Operação inválida, insira <Pedra>, <Papel> ou <Tesoura>, excluindo os <>')

    continuar = str(input('Quer continuar a tentar? (s/n)\n'))

else:
    print('Ok, parando a execução.')


