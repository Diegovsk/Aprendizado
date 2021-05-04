listagem = ('lápis', 1.75, 'Borracha', 2, 'Caderno', 15.9,
            'estojo', 25, 'Transferidor', 4.20, 'Compasso', 9.99,
            'mochila', 120.32, 'Canetas', 22.30, 'Livro', 34.9)

print('-' * 40)
print(f'{"LISTAGEM DE PREÇOS":^40}')
print('-' * 40)

for i in range(0, len(listagem)):
    if i % 2 == 0:
        print(f'{listagem[i]:.<30} ', end='')
    else:
        print(f'R${listagem[i]:.2f}')


print('-' * 40)