import math
angulo = float(input('Digite o ângulo: '))
sen = math.sin(math.radians(angulo))
cos = math.cos(math.radians(angulo))
print('O ângulo de {} tem:\n o seno de {:.2f} e \ncosseno de {:.2f}'.format(angulo, sen, cos))