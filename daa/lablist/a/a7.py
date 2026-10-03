# Design and implement in to find a subset of a given set S = {Sl, 
# S2,.....,Sn} of n positive integers whose SUM is equal to a given 
# positive integer d. For example, if S={1, 2, 5, 6, 8} and d= 9, 
# there are two solutions {1,2,6} and {1,8}. Display a suitable 
# message, if the given problem instance doesn't have a solution. 

def find_subset_sum(S, d):
    subset = []
    def find_subset_recursive(index, current_sum, current_subset):
        if current_sum == d:
            subset.append(list(current_subset))
            return
        if current_sum > d or index == len(S):
            return

        current_subset.add(S[index])
        find_subset_recursive(index + 1, current_sum + S[index], current_subset)

        current_subset.remove(S[index])
        find_subset_recursive(index + 1, current_sum, current_subset)

    find_subset_recursive(0, 0, set())
    return subset

S = set(map(int, input("Enter the values: ").split()))
d = int(input("Enter the target sum: "))
result = find_subset_sum(list(S), d)
if result:
    print("Subset with sum ", d, "found and they are: ")
    for subset in result:
        print(set(subset))
else:
    print("No subset with sum ",d)
                
# OUTPUT                
# Enter the values: 2 1 3 4 5 6
# Enter the target sum: 15
# Subset with sum  15 found and they are: 
# {1, 2, 3, 4, 5}
# {1, 3, 5, 6}
# {2, 3, 4, 6}
# {4, 5, 6}

# Enter the values: 2 1 3 4 5 6
# Enter the target sum: 45
# No subset with sum  45