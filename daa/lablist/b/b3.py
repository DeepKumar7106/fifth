from sys import maxsize
from itertools import permutations as pe
v=4
def tsp(graph,s):
    vertex=[]
    for i in range(v):
        if i!=s:
            vertex.append(i)
    min_path=maxsize
    next_p=pe(vertex)
    for i in next_p:
        print(i,end=":")
        current_pathweight=0
        k=s
        for j in i:
            current_pathweight+=graph[k][j]
            k=j
        current_pathweight+=graph[k][s]
        min_path=min(min_path,current_pathweight)
        print(current_pathweight)
    return min_path

graph=[[0,2,5,7],[2,0,8,3],[5,8,0,1],[7,3,1,0]]
s=0
print("traveling salesman")
print("given graph")
for i in graph:
    print(i)
print("\npossible paths begin and ends at source:",s,":")
print("minimum cost:",tsp(graph,s))
