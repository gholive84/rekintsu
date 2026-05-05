-- ============================================================
-- Rekintsu — Corrige status dos posts agendados
-- Execute UMA VEZ via phpMyAdmin no banco: u492702861_rekintsu
-- ============================================================

-- 1. Preenche scheduled_at com a data de criação nos posts com data futura
--    (a coluna scheduled_at é o que o cron usa para decidir quando publicar)
UPDATE posts
SET    scheduled_at = created_at,
       status       = 'scheduled'
WHERE  status       = 'published'
  AND  created_at   > NOW();

-- 2. Confirma resultado
SELECT id, title, status, scheduled_at, created_at
FROM   posts
ORDER  BY created_at ASC;
