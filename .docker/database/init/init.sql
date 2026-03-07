CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO tasks (title, description) VALUES
    ('Setup project', 'Initialize Docker environment with PHP and MySQL'),
    ('Write tests', 'Create Playwright e2e tests for the application'),
    ('Deploy to CI', 'Configure GitHub Actions workflow');