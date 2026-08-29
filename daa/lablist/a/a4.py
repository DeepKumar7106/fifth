#BFS
##graph = {
##    '5': ['3', '7'],
##    '3': ['2', '4'],
##    '7': ['8'],
##    '2': [],
##    '4': ['8'],
##    '8': []
##}

graph =  {
    'a':['d','c','e'],
    'b':['f','e'],
    'c':['a','d','f'],
    'd':['c','a'],
    'e':['a','b','f'],
    'f':['b','c','e'],
    'g':['h','j'],
    'h':['g','i'],
    'i':['j','h'],
    'j':['g','i'],
}

visited = []
def bfs(start):
    queue = []
    visited.append(start)
    queue.append(start)

    while queue:
        node = queue.pop(0)
        print(node, end = " ")

        for neighbour in graph[node]:
            if neighbour not in visited:
                visited.append(neighbour)
                queue.append(neighbour)

print("The graph is ", graph)
start = input("Enter a starting node: ")
print("BFS Travesal of given graph: ")
bfs(start)

for node in graph:
    if node not in visited:
        bfs(node)

                
