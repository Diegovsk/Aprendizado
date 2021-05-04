operacao = float(input("Qual operacaoeracao deseja fazer? \n[1] Soma [2] Subtracao [3] Divisao [4] Multiplicacao [5] Raiz\n Digite o número da operacaoeracão: "))

if operacao == 1:
    num1 = float(input("Digite um numero: "))
    num2 = float(input("Digite outro numero: "))
    resultado = num1 + num2
    print("O resultado é: {}".format(resultado))
elif operacao == 2:
    num1 = float(input("Digite um numero: "))
    num2 = float(input("Digite outro numero: "))
    resultado = num1 - num2
    print("O resultado é: {}".format(resultado))
elif operacao == 3:
    num1 = float(input("Digite um numero: "))
    num2 = float(input("Digite outro numero: "))
    resultado = num1 / num2
    print("O resultado é: {}".format(resultado))
elif operacao == 4:
    num1 = float(input("Digite um numero: "))
    num2 = float(input("Digite outro numero: "))
    resultado = num1 * num2
    print("O resultado é: {}".format(resultado))
elif operacao == 5:
    num1 = float(input("Digite um numero: "))
    resultado = num1 ** (1/2)
    print("O resultado é: {}".format(resultado))
else:
    print("Operaćão inválida!")
