def strassen_matrix_multiply(A,B):
    a, b, c, d = A[0][0], A[0][1], A[1][0], A[1][1]
    e, f, g, h = B[0][0], B[0][1], B[1][0], B[1][1]

    m1 = (a + d) * (e + h)
    m2 = (c + d) * e
    m3 = a * (f - h)
    m4 = d * (g - e)
    m5 = (a + b) * h
    m6 = (c - a) * (e + f)
    m7 = (b - d) * (g + h)

    return [[m1 + m4 - m5 + m7, m3 + m5],[m2 + m4, m1 + m3 - m2 + m6]]

A = [[int(input(f"Enter A[{i}][{j}]: ")) for j in range(2)] for i in range(2)]
B = [[int(input(f"Enter B[{i}][{j}]: ")) for j in range(2)] for i in range(2)]

result = strassen_matrix_multiply(A,B)
for row in result:
    print(row)
