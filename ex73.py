times = ('Palmeiras', 'Flamengo', 'Internacional', 'Grêmio', 'São Paulo', 'Atlético-MG', 'Athletico-PR', 'Cruzeiro', 'Botafogo', 'Santos', 'Bahia',
          'Fluminense', 'Corinthians', 'Chapecoense', 'Ceará', 'Vasco', 'Sport', 'América-MG', 'Vitória', 'Paraná')

print(f'Os 5 primeiros colocados são: {times[:5]}')
print(f'\nOs 4 últimos colocados são: {times[-4:]}')
print(f'\nEm ordem alfabética, a lista fica assim: {sorted(times)}')
print(f'\nA posição do clube Chapecoense na tabela, é na posição: {times.index("Chapecoense") + 1}')
