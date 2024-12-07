CREATE TABLE IF NOT EXISTS "migrations"(
  "id" integer primary key autoincrement not null,
  "migration" varchar not null,
  "batch" integer not null
);
CREATE TABLE IF NOT EXISTS "users"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "email" varchar not null,
  "email_verified_at" datetime,
  "password" varchar not null,
  "remember_token" varchar,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE UNIQUE INDEX "users_email_unique" on "users"("email");
CREATE TABLE IF NOT EXISTS "password_reset_tokens"(
  "email" varchar not null,
  "token" varchar not null,
  "created_at" datetime,
  primary key("email")
);
CREATE TABLE IF NOT EXISTS "sessions"(
  "id" varchar not null,
  "user_id" integer,
  "ip_address" varchar,
  "user_agent" text,
  "payload" text not null,
  "last_activity" integer not null,
  primary key("id")
);
CREATE INDEX "sessions_user_id_index" on "sessions"("user_id");
CREATE INDEX "sessions_last_activity_index" on "sessions"("last_activity");
CREATE TABLE IF NOT EXISTS "cache"(
  "key" varchar not null,
  "value" text not null,
  "expiration" integer not null,
  primary key("key")
);
CREATE TABLE IF NOT EXISTS "cache_locks"(
  "key" varchar not null,
  "owner" varchar not null,
  "expiration" integer not null,
  primary key("key")
);
CREATE TABLE IF NOT EXISTS "jobs"(
  "id" integer primary key autoincrement not null,
  "queue" varchar not null,
  "payload" text not null,
  "attempts" integer not null,
  "reserved_at" integer,
  "available_at" integer not null,
  "created_at" integer not null
);
CREATE INDEX "jobs_queue_index" on "jobs"("queue");
CREATE TABLE IF NOT EXISTS "job_batches"(
  "id" varchar not null,
  "name" varchar not null,
  "total_jobs" integer not null,
  "pending_jobs" integer not null,
  "failed_jobs" integer not null,
  "failed_job_ids" text not null,
  "options" text,
  "cancelled_at" integer,
  "created_at" integer not null,
  "finished_at" integer,
  primary key("id")
);
CREATE TABLE IF NOT EXISTS "failed_jobs"(
  "id" integer primary key autoincrement not null,
  "uuid" varchar not null,
  "connection" text not null,
  "queue" text not null,
  "payload" text not null,
  "exception" text not null,
  "failed_at" datetime not null default CURRENT_TIMESTAMP
);
CREATE UNIQUE INDEX "failed_jobs_uuid_unique" on "failed_jobs"("uuid");
CREATE TABLE IF NOT EXISTS "table_user"(
  "id" integer primary key autoincrement not null,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "table_luminaries"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "testimonial" text not null,
  "user_id" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("user_id") references "users"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "table_mentorship"(
  "id" integer primary key autoincrement not null,
  "category" varchar not null,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "galleries"(
  "id" integer primary key autoincrement not null,
  "title" varchar not null,
  "description" text not null,
  "cover_image" varchar,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "table_events"(
  "id" integer primary key autoincrement not null,
  "title" varchar not null,
  "description" text not null,
  "mentorship_id" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("mentorship_id") references "mentorships"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "newsletter"(
  "id" integer primary key autoincrement not null,
  "title" varchar not null,
  "folder_path" varchar,
  "photo_path" varchar not null,
  "category" varchar check("category" in('luminary', 'featured')) not null,
  "created_at" datetime,
  "updated_at" datetime
);

INSERT INTO migrations VALUES(1,'0001_01_01_000000_create_users_table',1);
INSERT INTO migrations VALUES(2,'0001_01_01_000001_create_cache_table',1);
INSERT INTO migrations VALUES(3,'0001_01_01_000002_create_jobs_table',1);
INSERT INTO migrations VALUES(4,'2024_11_30_130507_create_table_user_table',1);
INSERT INTO migrations VALUES(5,'2024_11_30_130655_create_table_luminaries_table',1);
INSERT INTO migrations VALUES(6,'2024_11_30_130713_create_table_mentorship_table',1);
INSERT INTO migrations VALUES(7,'2024_11_30_130735_create_table_gallery_table',1);
INSERT INTO migrations VALUES(8,'2024_11_30_130806_create_table_photos_table',1);
INSERT INTO migrations VALUES(9,'2024_11_30_130850_create_table_events_table',1);
INSERT INTO migrations VALUES(10,'2024_12_01_143816_create_table_newsletter_table',1);
