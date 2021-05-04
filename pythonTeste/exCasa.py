valor = int(input("Qual é o valor da casa?"))
salario = int(input("Qual é o salário mensal?"))
anos = int(input("Em quantos anos será parcelado?"))

meses = anos * 12
prestacao = valor/meses

if prestacao > salario * 0.3:
    print("Empréstimo negado.")
else:
    print("Empréstimo aprovado!")


