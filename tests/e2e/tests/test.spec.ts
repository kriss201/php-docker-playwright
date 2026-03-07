import { test, expect } from '@playwright/test';

test('home loads', async ({ page }) => {
    await page.goto('/');

    // Expect the page title
    await expect(page).toHaveTitle(/phpinfo/);
});

test('database is visible', async ({ page }) => {
    await page.goto('/database.php');

    // Expect the page title
    await expect(page).toHaveTitle(/Tasks/);

    await expect(page.locator('h1')).toContainText('Tasks');
    await expect(page.getByRole('heading', { name: 'Tasks' })).toBeVisible();

    await expect(page.getByRole('cell', { name: 'Setup project' })).toBeVisible();
    await expect(page.getByRole('cell', { name: 'Initialize Docker environment' })).toBeVisible();

});
