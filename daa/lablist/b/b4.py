# Write program to generate the Huffman code for the given 
# character and probabilities. 
# Character     |A   |B   |C   |D   |E   |
# Probability   |0.1 |0.1 |0.2 |0.2 |0.4 |

characters = ['A','B','C','D','E']
probabilities = [0.35,0.1,0.2,0.2,0.15]

trees = []
for i in range(len(characters)):
    trees.append((probabilities[i], characters[i]))

while len(trees) > 1:
    trees.sort(key = lambda x : x[0])
    left = trees.pop(0)
    right = trees.pop(0)

    new_weight = left[0] + right[0]
    new_tree = (new_weight, (left,right))

    trees.append(new_tree)

huffman_tree = trees[0]

codes = {}
def generate_codes(trees, code = ""):
    weight, node = trees
    
    if type(node) == str:
        codes[node] = code
        return

    generate_codes(node[0], code + "0")
    generate_codes(node[1], code + "1")

generate_codes(huffman_tree)

print("Huffman codes: ")
for character in characters:
    print(character, ":", codes[character])

# OUTPUT
# Huffman codes:
# A : 11
# B : 100
# C : 00
# D : 01
# E : 101