# mahasiwa yg punya mininal nilai B
SELECT * FROM `mahasiswas` WHERE nilai >= 81

# mahasiwa yg punya mininal tertinggi ke 2
SELECT * FROM `mahasiswas` order BY nilai DESC LIMIT 1 OFFSET 1
