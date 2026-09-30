from numpy.ma.core import append


def find(parent, node):
    if parent[node] != node:
        parent[node] = find(parent, parent[node])
    return parent[node]

def union(parent, rank, u, v):
    root_u = find(parent, u)
    root_v = find(parent, v)

    if root_u == root_v:
        return False

    if rank[root_u] < rank[root_v]:
        parent[root_u] = root_v
    elif rank[root_u] > rank[root_v]:
        parent[root_v] = root_u
    else:
        parent[root_v] = root_u
        rank[root_u] += 1
    return True

def Kruskal(n, edges):
    edges.sort()
    parent = [i for i in range(n)]
    rank = [0] * n

    mst = []
    mst_cost = 0

    for w, u, v in edges:
        if union(parent, rank, u, v):
            mst.append((u, v, w))
            mst_cost += w

    return mst, mst_cost

n = 6
edges = [
    ( 4, 0, 1),
    ( 2, 0, 2),
    ( 4, 1, 2),
    ( 5, 1, 3),
    ( 1, 2, 3),
    ( 3, 2, 4),
    ( 6, 3, 4),
    ( 7, 3, 5),
    ( 8, 4, 5),
]

mst, mst_cost = Kruskal(n, edges)

print("*********** Kruskal's Algorithm ***********\nEdges in the Minimum Spanning Tree:")
for u, v, w in mst:
    print(f"{u} -- {v} = {w}")

print("\nTotal Cost of MST: ", mst_cost)

# *********** Kruskal's Algorithm ***********
# Edges in the Minimum Spanning Tree:
# 2 -- 3 = 1
# 0 -- 2 = 2.
# 3 -- 5 = 7
#
# Total Cost of MST:  17