import sys

def helpers(n, value, text):
    my_value = value + 1
    my_max = 9 - n
    while my_value <= my_max:
        if n > 0:
            helpers(n-1, my_value, text + str(my_value))
        else:
            print(text + str(my_value))
        my_value += 1


def my_aff_combn(n):
    if n < 1 or n > 10:
        return False
    helpers(n - 1, -1, "")

my_aff_combn(int(sys.argv[1]))
