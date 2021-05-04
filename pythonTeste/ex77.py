tupla = (
    'aprender', 'programar', 'linguagem', 'python', 'curso', 'gratis', 'estudar', 'praticar', 'trabalhar', 'mercado',
    'programador', 'futuro')

for p in tupla:
    print(f'\nNa palavra {p}, existe(m): ', end='')
    for l in p:
        if l in 'aeiou':
            print(l, end='')
