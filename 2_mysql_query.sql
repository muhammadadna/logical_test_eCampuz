SELECT tm.mhs_nama from testing.tb_mahasiswa tm
left join testing.tb_mahasiswa_nilai tmn on tm.mhs_id = tmn.mhs_id
LEFT join testing.tb_matakuliah tm2 on tmn.mk_id = tm2.mk_id
where tm2.mk_kode = 'MK303'
order by tmn.niali DESC
limit 1;
