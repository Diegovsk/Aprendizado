dicionario = dict()
dicionario["nome"] = str(input("Digite o nome: "))
dicionario["nota"] = float(input("Digite a média: "))

if dicionario["nota"] >= 6:
    print("-="*20)
    print(f'Nome: {dicionario["nome"]}')
    print(f'Média: {dicionario["nota"]}')
    print(f'Situacao: aprovado')
else:
    print("-=" * 20)
    print(f'Nome: {dicionario["nome"]}')
    print(f'Média: {dicionario["nota"]}')
    print(f'Situacao: reprovado')
