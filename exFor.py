nome = 0
sexo = 'a'
idade = 0
conta_idade = 0
fquantidade = 0
velho = []

for c in range(1, 5):
    nome = str(input("Digite seu nome: "))
    sexo = str(input("\nDigite seu sexo: [M/F]")).upper()
    idade = int(input("\nDigite sua idade: "))

    velho.append(idade)
    conta_idade += idade

    if sexo == "F" and idade < 20:
        fquantidade += 1

print("O homem mais velho tem {} anos,\nExiste(m) {} mulher(es) abaixo de vinte anos,\nE média de idade é de {}".format(max(velho), fquantidade, conta_idade/4))
