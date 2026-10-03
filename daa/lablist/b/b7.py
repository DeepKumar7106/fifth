# Write program for solving N-queens problem, by taking value 
# of N as input.

def print_solution(board):
    for row in board:
        print(" ".join("Q" if col else "." for col in row))
    print()


def is_safe(board, row, col, n):
    for i in range(row):
        if board[i][col]:
            return False

    for i, j in zip(range(row - 1, -1, -1), range(col - 1, -1, -1)):
        if board[i][j]:
            return False
        
    for i, j in zip(range(row - 1, -1, -1), range(col + 1, n)):
        if board[i][j]:
            return False
    return True

def solve_n_queens(board, row, n, solutions):
    if row == n:
        solution = [row[:] for row in board]
        solutions.append(solution)
        return
    for col in range(n):
        if is_safe(board, row, col, n):
            board[row][col] = 1
            solve_n_queens(board, row + 1, n, solutions)
            board[row][col] = 0


def nqueens(n):
    board =[[0 for _ in range(n)] for _ in range(n)]
    solutions = []
    solve_n_queens(board, 0, n, solutions)
    return solutions
    
N = int(input("Enter the number of queens: "))
res = nqueens(N)
print(f"Total solutions for {N} Queens are {len(res)}: \n")

for idx, solution in enumerate(res, start=1):
    print(f"Solution {idx}: ")
    print_solution(solution)

# OUTPUT
# Enter the number of queens: 4
# Total solutions for 4 Queens are 2: 

# Solution 1:
# . Q . .
# . . . Q
# Q . . .
# . . Q .

# Solution 2:
# . . Q .
# Q . . .
# . . . Q
# . Q . .