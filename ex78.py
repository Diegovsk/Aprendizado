lista = [int(input("Digite um valor: ")), int(input("Digite um valor: ")), int(input("Digite um valor: ")),
         int(input("Digite um valor: ")), int(input("Digite um valor: "))]

print(f'Você digitou: {lista}')
print(f'O valor minimo digitado está na posição {lista.index(min(lista))} e seu valor é {min(lista)}')
print(f'O valor máximo digitado está na posição {lista.index(max(lista))} e seu valor é {max(lista)}')
