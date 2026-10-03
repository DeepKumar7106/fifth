# Write a program that implements Prim’s algorithm to generate 
# minimum cost spanning Tree. 

INF = 9999999
sum = 0
N = 5
G = [
        [0,19,5,0,0],
        [19,0,5,9,2],
        [5,5,0,1,6],
        [0,9,1,0,1],
        [0,2,6,1,0]
    ]
visited = [0,0,0,0,0]
V = 0
visited[0] = True
print("\nWeight Matrix of a Given graph")
for i in G:
    print(i)

print("\nThe Minimum cost spanning tree by Prim's Algorithm\nEdge\t:\tWeight\n")
while V < N - 1:
    minimum = INF
    a = 0
    b = 0

    for m in range(N):
        if visited[m]:
            for n in range(N):
                if (not visited[n]) and G[m][n]:
                    if minimum > G[m][n]:
                        minimum = G[m][n]
                        a = m
                        b = n
    print(str(a) + "-" + str(b) + "\t:\t" + str(G[a][b]))
    sum += int(G[a][b])
    visited[b] = True
    V += 1
print("\nTotal cost = ", sum)

# OUTPUT
# Weight Matrix of a Given graph
# [0, 19, 5, 0, 0]
# [19, 0, 5, 9, 2]
# [5, 5, 0, 1, 6]
# [0, 9, 1, 0, 1]
# [0, 2, 6, 1, 0]
#
# The Minimum cost spanning tree by Prim's Algorithm
# Edge	:	Weight
#
# 0-2	:	5
# 2-3	:	1
# 3-4	:	1
# 4-1	:	2
#
# Total cost =  9