
def bubble_sort(arr):
    n = len(arr)
    # Loop untuk seluruh elemen
    for i in range(n):
        # Flag untuk mengecek apakah ada pertukaran pada iterasi ini
        swapped = False
        
        # Loop untuk membandingkan pasangan elemen
        for j in range(0, n - i - 1):
            if arr[j] > arr[j + 1]:
                # Tukar posisi angka
                arr[j], arr[j + 1] = arr[j + 1], arr[j]
                swapped = True
                
        # Jika tidak ada angka yang ditukar, berarti data sudah terurut
        if not swapped:
            break

# Contoh Penggunaan:
angka = [10, 20, 70, 5, 135, 67, 88, 22]
bubble_sort(angka)

print("Hasil pengurutan:", angka)
# Output: [1, 2, 3, 4, 6, 7, 8, 9, 10]

#yang benar
angka = [2, 8, 16, 12, 4, 24, 42, 20]

angka_urut = sorted(angka)

print (" Angka acak :", angka)
print (" Angka urut : ", angka_urut)