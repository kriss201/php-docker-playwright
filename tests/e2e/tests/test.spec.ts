import { test, expect } from '@playwright/test';

test('home loads', async ({ page }) => {
    await page.goto('/');

    // Expect the page title
    await expect(page).toHaveTitle(/phpinfo/);
});

test('database is visible', async ({ page }) => {
    await page.goto('/database.php');


});
