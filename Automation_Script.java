import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import java.lang.Thread;
import org.openqa.selenium.support.ui.Select;
public class Main {
    public static void main(String[] args) {
        System.out.println("Hello world!");
        System.setProperty("webdriver.chrome.driver","D:\\Updated chromedriver\\chromedriver.exe");

        WebDriver driver = new ChromeDriver();
        driver.get("http://localhost/test/wp-login.php");
        driver.findElement(By.id("user_login")).sendKeys("Faishal");
        driver.findElement(By.id("user_pass")).sendKeys("*Faishalreza17#");
        driver.findElement(By.id("wp-submit")).click();
        driver.findElement(By.id("toplevel_page_wp-dark-mode-settings")).click();
        System.out.println(driver.findElement(By.id("wppool-wp_dark_mode_general[enable_frontend]")).isSelected());
        if (!driver.findElement(By.id("wppool-wp_dark_mode_general[enable_frontend]")).isSelected()){
            driver.findElement(By.xpath("//label[@for='wppool-wp_dark_mode_general[enable_frontend]']")).click();

        }
        driver.findElement(By.xpath("//label[@for='wppool-wp_dark_mode_general[enable_backend]']")).click();
        driver.findElement(By.id("save_settings")).click();
        driver.findElement(By.id("wp-admin-bar-site-name")).click();
        driver.findElement(By.id("wp-admin-bar-site-name")).click();
        driver.findElement(By.id("toplevel_page_wp-dark-mode-settings")).click();
        //Thread.sleep(3000);
        driver.findElement(By.id("wp_dark_mode_switch-tab")).click();
        driver.findElement(By.xpath("//label[@for='wppool-wp_dark_mode_switch[switch_style][3]']")).click();
        driver.findElement(By.xpath("//div[@class='wp-dark-mode-buttons']//span[6]")).click();
        driver.findElement(By.id("wp_dark_mode_switch[switcher_scale]")).sendKeys("150");
        //driver.findElement(By.id("wp_dark_mode_switch[switcher_position]")).;
        Select switchPosition = new Select(driver.findElement(By.id("wp_dark_mode_switch[switcher_position]")));
        switchPosition.selectByIndex(1);

        //driver.findElement(By.id("save_settings")).click();
        //wp_dark_mode_switch[switcher_size]



    }
}