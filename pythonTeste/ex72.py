umvinte = ('zero', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove', 'dez', 'onze', 'doze', 'treze', 'quatorze', 'quinze',
            'dezesseis', 'dezesete', 'dezoito', 'dezenove', 'vinte')

numero = int(input("Digite um número de 0 a 20: "))

if 0 <= numero <= 20:
    numero = numero
    print(f'O número por extenso é: {umvinte[numero]}')
else:
 #   while 0 <= numero <=20:
  #      print("alo")
  numero = int(input("Tente novamente. O número deve estar entre 0 e 20: "))