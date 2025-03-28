n = input("메일 발송 횟수를 입력하시오>>")

for n in range(1, int(n) + 1):
    if n == 5:
        continue
    print(f"{n}번째 메일 발송")


    