dic = dict()
lista = list()
soma = média = 0
while True:
    dic["nome"] = str(input("Digite o nome: "))
    dic["sexo"] = str(input("Digite o sexo: [M/F]")).upper()[0]
    dic["idade"] = int(input("Digite a idade: "))
    lista.append(dic.copy())
    op = str(input("Quer continuar? [S/N]")).upper()[0]
    soma += dic["idade"]
    if op in 'Nn':
        break
print(f'Foram cadastradas {len(lista)}')
média = soma / len(lista)
print(f'A média de idade é de : {média:.2f}')
for i in lista:
    if i["sexo"] == 'F':
        print(f'As mulheres são: {i["nome"]}')
for j in lista:
    if j["idade"] > média:
        print(f'Idade acima da média: {j["nome"]} com {j["idade"]} anos')
