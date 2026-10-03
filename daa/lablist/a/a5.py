# Write program to implement the DFS algorithm for a graph. 

graph = {
   '5': ['3','7'],
   '3': ['2','4'],
   '7': ['8'],
   '2': [],
   '4': ['8'],
   '8': [],
}

visited = set()
def dfs(visited, graph, node):
    if node not in visited:
        print(node, end = " ")
        visited.add(node)

        for neighbour in graph[node]:
            dfs(visited, graph, neighbour)

print("Graph: ", graph)
print("Following is the depth first search: ")
start = input("Enter starting node: ")

dfs(visited, graph, start)

for node in graph:
    if node not in visited:
        dfs(visited, graph, node)

# OUTPUT
# Graph:  {'a': ['b', 'c'], 'b': ['a', 'd'], 'c': ['a', 'e'], 'd': ['b', 'e'], 'e': ['c', 'd'], 'f': ['g', 'h'], 'g': ['f', 'i'], 'h': ['f', 'i'], 'i': ['g', 'h']}
# Following is the depth first search: 
# Enter starting node: a
# a b d e c f g i h 