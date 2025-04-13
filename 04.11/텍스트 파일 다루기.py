# 파일 쓰기
with open('test.txt', 'w') as f:
    f.write("Hello, Python!")

# 파일 읽기
with open('test.txt', 'r') as f:
    content = f.read()
    print(content)

# 정수 변환 예제
num = int(content) + 1  # 예시용 숫자 텍스트일 경우
