from random import randint
lista = [[], [], [], [], [], []]

jogos = int(input("Quantos jogos serâo gerados: "))

for c in (1, jogos):
    lista.append(randint(1, 60))

print(lista)
