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
                
