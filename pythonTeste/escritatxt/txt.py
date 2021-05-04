def escrever(nome, idade):
    abertura = open("pessoas.txt", "a")
    abertura.write(f'\n{nome:.<30} {idade} anos')

def ler():
    from time import sleep
    abertura = open("pessoas.txt", "r")
    print("="*40)
    print("LISTANDO PESSOAS...".center(40))
    print("="*40)
    sleep(0.5)
    print(abertura.read())
    print()
    print()

