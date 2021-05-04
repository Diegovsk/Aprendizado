def notas(*n, sit=False):
    """
    -> Function to analyse the degree and situation of the students.
    n: one or more grades(accept how many you want).
    sit: True or False(standard), used to show the situation of the student.
    return: returns a dictionarie about the things.
    """
    r = dict()
    r["nota"] = len(n)
    r["maior"] = max(n)
    r["menor"] = min(n)
    r["media"] = sum(n)/len(n)

    if sit:
        if r["media"] >= 7:
            r["situacão"] = 'bom'
        elif 5 > r["media"] < 7:
            r["situacão"] = "Regular"
        else:
            r["situacão"] = 'Ruim'
    return r

resp = notas(5.5, 6.0, 7, 3,5, sit=True)
print(resp)