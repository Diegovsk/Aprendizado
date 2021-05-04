# sete valores numericos e cadastrar em uma lista unica separando pares #e impares, mostrando em ordem crescente
lista = [[], []]
vlr = 0
for c in range(0, 7):
    vlr = (int(input("Digite o número: ")))
    if vlr % 2 == 0:
        lista[0].append(vlr)
    elif vlr % 2 == 1:
        lista[1].append(vlr)

print(sorted(lista))
print(lista[1])
print(lista[0])