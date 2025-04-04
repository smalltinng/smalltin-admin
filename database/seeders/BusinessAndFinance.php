<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BusinessAndFinance extends Seeder
{
    /**
     * Run the database seeds.
     */
static    public function run(): void
    {
        $questions = [
            [
                'field_id' => 16,
                 'question' => 'What is the primary function of an investment bank?',
                'a' => 'Issuing loans to the public',
                'b' => 'Providing financial advisory services and underwriting new debt and equity securities',
                'c' => 'Printing money for the government',
                'd' => 'Managing the country’s currency and interest rates',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the main objective of a hedge fund?',
                'a' => 'Investing in government bonds',
                'b' => 'Maximizing returns while minimizing risk for wealthy investors',
                'c' => 'Managing public pension funds',
                'd' => 'Providing microloans to small businesses',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which of the following is considered a liquid asset?',
                'a' => 'Real estate',
                'b' => 'Cash',
                'c' => 'Machinery',
                'd' => 'Patents',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which financial statement provides a snapshot of a company’s financial position at a specific point in time?',
                'a' => 'Income statement',
                'b' => 'Balance sheet',
                'c' => 'Cash flow statement',
                'd' => 'Statement of retained earnings',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the term for the profit earned from the sale of an asset?',
                'a' => 'Net income',
                'b' => 'Capital gain',
                'c' => 'Gross margin',
                'd' => 'Operating income',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which of the following best describes "risk management" in finance?',
                'a' => 'Investing in high-risk stocks to maximize returns',
                'b' => 'Identifying, assessing, and prioritizing risks followed by coordinated efforts to minimize their impact',
                'c' => 'Avoiding any form of investment risk by keeping assets in cash',
                'd' => 'Speculating on currency fluctuations',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is a "blue chip" stock?',
                'a' => 'A stock with low liquidity',
                'b' => 'A stock with a high risk of failure',
                'c' => 'A stock of a large, well-established, and financially sound company',
                'd' => 'A stock that is new to the market',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "ROI" stand for in finance?',
                'a' => 'Return on Investment',
                'b' => 'Rate of Interest',
                'c' => 'Risk of Inflation',
                'd' => 'Revenue over Income',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which financial instrument represents a loan made by an investor to a borrower?',
                'a' => 'Stock',
                'b' => 'Bond',
                'c' => 'Option',
                'd' => 'Futures contract',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "inflation" in economic terms?',
                'a' => 'A decrease in the overall price level of goods and services',
                'b' => 'An increase in the overall price level of goods and services over time',
                'c' => 'A reduction in the purchasing power of money',
                'd' => 'A period of economic recession',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        // Business and Finance - Finance Questions
        
            [
                'field_id' => 16,
                               'question' => 'What is the primary function of an investment bank?',
                'a' => 'Issuing loans to the public',
                'b' => 'Providing financial advisory services and underwriting new debt and equity securities',
                'c' => 'Printing money for the government',
                'd' => 'Managing the country’s currency and interest rates',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the main objective of a hedge fund?',
                'a' => 'Investing in government bonds',
                'b' => 'Maximizing returns while minimizing risk for wealthy investors',
                'c' => 'Managing public pension funds',
                'd' => 'Providing microloans to small businesses',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which of the following is considered a liquid asset?',
                'a' => 'Real estate',
                'b' => 'Cash',
                'c' => 'Machinery',
                'd' => 'Patents',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which financial statement provides a snapshot of a company’s financial position at a specific point in time?',
                'a' => 'Income statement',
                'b' => 'Balance sheet',
                'c' => 'Cash flow statement',
                'd' => 'Statement of retained earnings',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the term for the profit earned from the sale of an asset?',
                'a' => 'Net income',
                'b' => 'Capital gain',
                'c' => 'Gross margin',
                'd' => 'Operating income',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which of the following best describes "risk management" in finance?',
                'a' => 'Investing in high-risk stocks to maximize returns',
                'b' => 'Identifying, assessing, and prioritizing risks followed by coordinated efforts to minimize their impact',
                'c' => 'Avoiding any form of investment risk by keeping assets in cash',
                'd' => 'Speculating on currency fluctuations',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is a "blue chip" stock?',
                'a' => 'A stock with low liquidity',
                'b' => 'A stock with a high risk of failure',
                'c' => 'A stock of a large, well-established, and financially sound company',
                'd' => 'A stock that is new to the market',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "ROI" stand for in finance?',
                'a' => 'Return on Investment',
                'b' => 'Rate of Interest',
                'c' => 'Risk of Inflation',
                'd' => 'Revenue over Income',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which financial instrument represents a loan made by an investor to a borrower?',
                'a' => 'Stock',
                'b' => 'Bond',
                'c' => 'Option',
                'd' => 'Futures contract',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "inflation" in economic terms?',
                'a' => 'A decrease in the overall price level of goods and services',
                'b' => 'An increase in the overall price level of goods and services over time',
                'c' => 'A reduction in the purchasing power of money',
                'd' => 'A period of economic recession',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        // Business and Finance - Finance Questions
        
            [
                'field_id' => 16,
                               'question' => 'What is the "time value of money"?',
                'a' => 'The idea that money is worth less in the future due to inflation',
                'b' => 'The concept that a dollar today is worth more than a dollar in the future',
                'c' => 'The idea that money appreciates over time without investments',
                'd' => 'The belief that money does not change in value over time',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which of the following is a primary function of an investment bank?',
                'a' => 'Providing checking and savings accounts to the public',
                'b' => 'Assisting companies in raising capital through the issuance of securities',
                'c' => 'Managing government welfare programs',
                'd' => 'Setting national interest rates',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is a "credit default swap"?',
                'a' => 'A type of loan given to high-risk borrowers',
                'b' => 'An agreement that transfers the credit exposure of fixed-income products between parties',
                'c' => 'A form of i-nsurance for personal loans',
                'd' => 'A swap where one party exchanges their credit rating with another',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which financial instrument represents ownership in a company?',
                'a' => 'Bond',
                'b' => 'Stock',
                'c' => 'Derivative',
                'd' => 'Option',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "ROI" stand for in finance?',
                'a' => 'Return on Investment',
                'b' => 'Rate of Income',
                'c' => 'Reinvestment of Interest',
                'd' => 'Real Option Index',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the role of the International Monetary Fund (IMF)?',
                'a' => 'To provide loans to countries in financial distress',
                'b' => 'To regulate international trade agreements',
                'c' => 'To manage the world’s gold reserves',
                'd' => 'To control exchange rates globally',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is a "bull market"?',
                'a' => 'A market characterized by declining stock prices',
                'b' => 'A market where stock prices are rising or expected to rise',
                'c' => 'A market with low trading volumes',
                'd' => 'A market driven by speculative trading',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which financial term describes the difference between the selling price and the cost of goods sold?',
                'a' => 'Net income',
                'b' => 'Gross margin',
                'c' => 'Operating income',
                'd' => 'EBITDA',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the main function of a hedge fund?',
                'a' => 'To provide loans to high-risk borrowers',
                'b' => 'To pool funds from investors and employ various strategies to earn active returns',
                'c' => 'To manage insurance claims for large companies',
                'd' => 'To offer financial planning services to individuals',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the "yield" on a bond?',
                'a' => 'The amount paid above the face value of a bond',
                'b' => 'The interest rate paid to the bondholder as a percentage of the bond’s face value',
                'c' => 'The maturity date of the bond',
                'd' => 'The principal amount of the bond',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        // Business and Finance - Finance Questions
        
            [
                'field_id' => 16,
                               'question' => 'What does "liquidity" refer to in finance?',
                'a' => 'The ability of an asset to be quickly converted into cash',
                'b' => 'The amount of profit a company generates',
                'c' => 'The rate of inflation in an economy',
                'd' => 'The level of debt a company carries',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the "Federal Reserve"?',
                'a' => 'The central bank of the United States',
                'b' => 'A private financial institution',
                'c' => 'An insurance company',
                'd' => 'A regulatory body for stock exchanges',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which of the following is an example of a "derivative"?',
                'a' => 'A stock option',
                'b' => 'A certificate of deposit',
                'c' => 'A government bond',
                'd' => 'A savings account',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the primary role of a "financial intermediary"?',
                'a' => 'To facilitate transactions between savers and borrowers',
                'b' => 'To set interest rates in the economy',
                'c' => 'To regulate the stock market',
                'd' => 'To provide accounting services to companies',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "inflation"?',
                'a' => 'A general increase in prices and fall in the purchasing value of money',
                'b' => 'The growth rate of an economy',
                'c' => 'A decrease in the unemployment rate',
                'd' => 'An increase in the production of goods',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which term refers to a prolonged period of declining economic performance?',
                'a' => 'Recession',
                'b' => 'Bull market',
                'c' => 'Stagflation',
                'd' => 'Boom',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the purpose of "diversification" in investing?',
                'a' => 'To spread risk across different investments',
                'b' => 'To maximize returns from a single asset',
                'c' => 'To increase exposure to a particular sector',
                'd' => 'To focus investments on high-growth stocks',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which financial statement shows a company’s financial position at a specific point in time?',
                'a' => 'Balance sheet',
                'b' => 'Income statement',
                'c' => 'Cash flow statement',
                'd' => 'Statement of shareholders’ equity',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the "price-to-earnings (P/E) ratio"?',
                'a' => 'A measure of a company’s current share price relative to its per-share earnings',
                'b' => 'The ratio of a company’s debt to its equity',
                'c' => 'The ratio of a company’s market value to its book value',
                'd' => 'A comparison of a company’s net income to its total assets',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the purpose of "monetary policy"?',
                'a' => 'To control the money supply and interest rates in an economy',
                'b' => 'To manage government spending and taxation',
                'c' => 'To regulate trade between countries',
                'd' => 'To enforce corporate governance standards',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        // Business and Finance - Finance Questions
        
            [
                'field_id' => 16,
                               'question' => 'Which of the following is a primary function of investment banks?',
                'a' => 'Managing government budgets',
                'b' => 'Underwriting new securities',
                'c' => 'Setting central bank interest rates',
                'd' => 'Issuing currency',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does the term "asset allocation" refer to?',
                'a' => 'The process of converting assets to cash',
                'b' => 'The distribution of investments across various asset classes',
                'c' => 'The allocation of a company’s assets to different departments',
                'd' => 'The strategy of minimizing taxes on assets',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is a "bull market"?',
                'a' => 'A market characterized by high trading volumes',
                'b' => 'A market where prices are steadily rising',
                'c' => 'A market with low investor confidence',
                'd' => 'A market dominated by short-selling',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "IPO" stand for in the finance world?',
                'a' => 'International Payment Option',
                'b' => 'Initial Public Offering',
                'c' => 'Income Per Order',
                'd' => 'Internal Profit Objective',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which of the following represents ownership in a company?',
                'a' => 'Bond',
                'b' => 'Stock',
                'c' => 'Loan',
                'd' => 'Mortgage',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "amortization"?',
                'a' => 'The process of spreading out a loan into a series of fixed payments',
                'b' => 'The decline in the value of a currency over time',
                'c' => 'The allocation of funds to different types of assets',
                'd' => 'The process of paying off debt in regular installments over time',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "ROE" stand for?',
                'a' => 'Return on Earnings',
                'b' => 'Return on Equity',
                'c' => 'Rate of Earnings',
                'd' => 'Revenue Over Expenses',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the purpose of a "hedge fund"?',
                'a' => 'To provide insurance against market risks',
                'b' => 'To invest in high-risk, high-reward opportunities',
                'c' => 'To pool funds for charitable purposes',
                'd' => 'To stabilize currency exchange rates',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which financial metric is used to measure a company’s profitability relative to its revenue?',
                'a' => 'Gross Domestic Product',
                'b' => 'Net Profit Margin',
                'c' => 'Current Ratio',
                'd' => 'Price-to-Earnings Ratio',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "leverage" in financial terms?',
                'a' => 'The use of borrowed funds to increase investment potential',
                'b' => 'The reduction of expenses to increase profitability',
                'c' => 'The process of issuing new shares to raise capital',
                'd' => 'The strategy of investing in multiple asset classes',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        // Business and Finance - Finance Questions
        
            [
                'field_id' => 16,
                               'question' => 'Which financial document provides a snapshot of a company’s financial condition at a specific point in time?',
                'a' => 'Income Statement',
                'b' => 'Balance Sheet',
                'c' => 'Cash Flow Statement',
                'd' => 'Statement of Retained Earnings',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the primary role of the Securities and Exchange Commission (SEC)?',
                'a' => 'To provide insurance for bank deposits',
                'b' => 'To regulate the stock market and protect investors',
                'c' => 'To manage the country’s money supply',
                'd' => 'To oversee international trade agreements',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which term describes the process of evaluating a company’s potential investment worth by analyzing its financial statements?',
                'a' => 'Diversification',
                'b' => 'Valuation',
                'c' => 'Speculation',
                'd' => 'Arbitrage',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is a "blue-chip" stock?',
                'a' => 'A stock that is newly listed on the stock exchange',
                'b' => 'A highly reputable company with a history of strong performance',
                'c' => 'A stock that is known for its high volatility',
                'd' => 'A stock primarily traded on the NASDAQ',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the main purpose of diversification in an investment portfolio?',
                'a' => 'To maximize returns by focusing on a single sector',
                'b' => 'To spread risk across different types of investments',
                'c' => 'To reduce tax liability',
                'd' => 'To increase exposure to emerging markets',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "liquidity" in the context of finance?',
                'a' => 'The ability to borrow money at a low interest rate',
                'b' => 'The ease with which an asset can be converted into cash',
                'c' => 'The ability to pay off long-term debt',
                'd' => 'The level of an asset’s volatility in the market',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which of the following is an example of a fixed-income security?',
                'a' => 'Common stock',
                'b' => 'Bond',
                'c' => 'Real estate',
                'd' => 'Commodity',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "capital gains tax" apply to?',
                'a' => 'Interest earned from savings accounts',
                'b' => 'Profits made from the sale of an asset',
                'c' => 'Dividends received from stock investments',
                'd' => 'Income from rental properties',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which term refers to the cost of borrowing money?',
                'a' => 'Principal',
                'b' => 'Interest',
                'c' => 'Equity',
                'd' => 'Dividend',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is a "mutual fund"?',
                'a' => 'A fund that pools money from many investors to buy a diversified portfolio of stocks, bonds, or other securities',
                'b' => 'A fund that invests primarily in real estate',
                'c' => 'A fund dedicated to high-risk, high-reward investments',
                'd' => 'A government-managed fund for retirement savings',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        // Business and Finance - Finance Questions
        
            [
                'field_id' => 16,
                               'question' => 'What is the main purpose of a financial statement audit?',
                'a' => 'To provide tax advice to a company',
                'b' => 'To verify the accuracy and fairness of a company’s financial statements',
                'c' => 'To assess the company’s operational efficiency',
                'd' => 'To ensure compliance with corporate governance policies',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which of the following is a common liquidity ratio?',
                'a' => 'Debt-to-Equity Ratio',
                'b' => 'Current Ratio',
                'c' => 'Return on Assets',
                'd' => 'Price-to-Earnings Ratio',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does the term "beta" measure in finance?',
                'a' => 'A company’s profitability',
                'b' => 'The volatility of a stock in relation to the market',
                'c' => 'The liquidity of an asset',
                'd' => 'The interest rate on a bond',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "debt financing"?',
                'a' => 'Using company earnings to fund new projects',
                'b' => 'Borrowing funds to finance business operations or investments',
                'c' => 'Issuing new equity shares to raise capital',
                'd' => 'Investing in long-term assets using retained earnings',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which financial metric is used to measure a company’s profitability relative to its revenue?',
                'a' => 'Debt Ratio',
                'b' => 'Gross Profit Margin',
                'c' => 'Return on Equity',
                'd' => 'Current Ratio',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "capital budgeting"?',
                'a' => 'Deciding how to allocate funds for short-term expenses',
                'b' => 'Planning and managing long-term investments and expenditures',
                'c' => 'Assessing daily operational costs',
                'd' => 'Setting short-term financial goals for a company',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which of the following represents a company’s total liabilities divided by its shareholders’ equity?',
                'a' => 'Current Ratio',
                'b' => 'Debt-to-Equity Ratio',
                'c' => 'Price-to-Earnings Ratio',
                'd' => 'Return on Investment',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "ROI" stand for in finance?',
                'a' => 'Rate of Income',
                'b' => 'Return on Investment',
                'c' => 'Revenue of Investment',
                'd' => 'Ratio of Income',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which term describes the risk of loss from fluctuations in exchange rates?',
                'a' => 'Credit Risk',
                'b' => 'Market Risk',
                'c' => 'Operational Risk',
                'd' => 'Currency Risk',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "margin trading"?',
                'a' => 'Buying securities with full payment upfront',
                'b' => 'Borrowing money to buy more securities than one can afford',
                'c' => 'Investing in high-risk, high-return stocks',
                'd' => 'Selling securities that one does not own',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is a "bearish market"?',
                'a' => 'A market with rising stock prices',
                'b' => 'A market where prices are falling',
                'c' => 'A market that is stable with no major changes',
                'd' => 'A market with high trading volume and volatility',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        // Business and Finance - Finance Questions
        
            [
                'field_id' => 16,
                               'question' => 'What does "liquidity" refer to in finance?',
                'a' => 'The ability of a company to pay off its long-term debt',
                'b' => 'The ease with which an asset can be converted into cash',
                'c' => 'The amount of capital a company has invested',
                'd' => 'The total value of a company’s assets',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "leverage" in financial terms?',
                'a' => 'Investing in short-term assets to improve liquidity',
                'b' => 'Using borrowed funds to increase the potential return on investment',
                'c' => 'Diversifying investments to reduce risk',
                'd' => 'Reducing expenses to improve profitability',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which financial document provides a summary of a company’s financial performance over a specific period?',
                'a' => 'Balance Sheet',
                'b' => 'Income Statement',
                'c' => 'Cash Flow Statement',
                'd' => 'Statement of Shareholders’ Equity',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "amortization"?',
                'a' => 'The gradual reduction of a loan balance over time through periodic payments',
                'b' => 'The increase in value of an asset over time',
                'c' => 'The conversion of assets into cash',
                'd' => 'The allocation of funds to different investment portfolios',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which of the following represents the cost of borrowing funds?',
                'a' => 'Yield',
                'b' => 'Interest Rate',
                'c' => 'Dividend',
                'd' => 'Principal',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "capital structure"?',
                'a' => 'The mix of a company’s long-term debt and equity financing',
                'b' => 'The allocation of funds to different asset classes',
                'c' => 'The process of managing a company’s cash flow',
                'd' => 'The method of valuing different financial instruments',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "earnings per share (EPS)" measure?',
                'a' => 'The total revenue of a company',
                'b' => 'The portion of a company’s profit allocated to each outstanding share of common stock',
                'c' => 'The market value of a company’s shares',
                'd' => 'The total dividends paid to shareholders',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the "discount rate" used for in finance?',
                'a' => 'The rate at which dividends are paid to shareholders',
                'b' => 'The interest rate used to determine the present value of future cash flows',
                'c' => 'The rate at which a company’s stock price grows',
                'd' => 'The fee charged by financial institutions for transactions',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'Which term describes the amount by which a company’s assets exceed its liabilities?',
                'a' => 'Operating Income',
                'b' => 'Net Worth',
                'c' => 'Gross Profit',
                'd' => 'Shareholders’ Equity',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "diversification" in investment terms?',
                'a' => 'Investing in a single asset to maximize returns',
                'b' => 'Spreading investments across different asset classes to reduce risk',
                'c' => 'Focusing on high-risk, high-reward investments',
                'd' => 'Maintaining a fixed portfolio of stocks and bonds',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        // Business and Finance - Finance Questions
        
            [
                'field_id' => 16,
                               'question' => 'What does "return on investment (ROI)" measure?',
                'a' => 'The amount of revenue generated from investments',
                'b' => 'The total amount of dividends paid',
                'c' => 'The percentage of profit relative to the investment cost',
                'd' => 'The growth rate of the investment over time',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is a "bull market"?',
                'a' => 'A market with low trading volume',
                'b' => 'A market with falling inflation',
                'c' => 'A market characterized by rising prices',
                'd' => 'A market that is stable with no significant price changes',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "financial leverage" involve?',
                'a' => 'Diversifying investments across various asset classes',
                'b' => 'The practice of reducing debt to lower financial risk',
                'c' => 'Using debt to finance the purchase of assets',
                'd' => 'The use of savings to fund new ventures',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is a "mutual fund"?',
                'a' => 'A type of bond issued by companies',
                'b' => 'A retirement savings account with tax benefits',
                'c' => 'An investment vehicle that pools money from multiple investors to invest in a diversified portfolio of assets',
                'd' => 'A short-term investment product with high returns',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "market capitalization"?',
                'a' => 'The amount of money a company has in its bank accounts',
                'b' => 'The total debt a company has incurred',
                'c' => 'The total value of a company’s outstanding shares of stock',
                'd' => 'The annual revenue of a company',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "capital budgeting"?',
                'a' => 'The practice of managing short-term cash flow',
                'b' => 'The method of evaluating potential investment opportunities',
                'c' => 'The process of planning and managing a company’s long-term investments',
                'd' => 'The allocation of funds to pay off existing debt',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "risk management"?',
                'a' => 'The strategy of using leverage to increase potential profits',
                'b' => 'The process of investing in high-risk assets for higher returns',
                'c' => 'The identification, assessment, and prioritization of risks followed by coordinated efforts to minimize or control their impact',
                'd' => 'The diversification of investments to spread risk',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "asset allocation"?',
                'a' => 'The strategy of investing in a single asset to maximize returns',
                'b' => 'The allocation of funds to cover short-term liabilities',
                'c' => 'The process of spreading investments across different asset classes to balance risk and return',
                'd' => 'The method of distributing a company’s capital among different departments',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is the "price-to-earnings (P/E) ratio"?',
                'a' => 'The ratio of a company’s debt to its equity',
                'b' => 'The total amount of dividends paid to shareholders divided by the number of shares outstanding',
                'c' => 'A valuation ratio calculated by dividing a company’s share price by its earnings per share',
                'd' => 'A measure of a company’s total revenue divided by its market capitalization',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "operating income"?',
                'a' => 'The total revenue a company earns from all sources',
                'b' => 'The profit earned from investments outside of core business operations',
                'c' => 'The profit a company makes from its core business operations, excluding any non-operating income or expenses',
                'd' => 'The amount of profit after all expenses have been deducted from revenue',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
        // Business and Finance - Finance Questions (Advanced)
        
            [
                'field_id' => 16,
                               'question' => 'What is "arbitrage" in finance?',
                'a' => 'The practice of buying and selling assets in different markets to exploit price differences',
                'b' => 'The method of increasing leverage to maximize returns',
                'c' => 'The process of assessing a company’s creditworthiness',
                'd' => 'The technique of predicting future market trends',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "beta" measure in finance?',
                'a' => 'The volatility of a stock relative to the overall market',
                'b' => 'The expected return on a stock',
                'c' => 'The dividend yield of a stock',
                'd' => 'The market capitalization of a company',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "Value at Risk" (VaR)?',
                'a' => 'A statistical measure of the risk of loss for investments',
                'b' => 'A method to calculate the future value of an investment',
                'c' => 'A metric to assess a company’s profitability',
                'd' => 'A technique for evaluating bond prices',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "duration" in bond investing?',
                'a' => 'A measure of a bond’s sensitivity to interest rate changes',
                'b' => 'The total time until a bond matures',
                'c' => 'The bond’s annual coupon payment',
                'd' => 'The difference between the bond’s face value and market price',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "CAPM" stand for in finance?',
                'a' => 'Capital Asset Pricing Model',
                'b' => 'Capital Accumulation Pricing Model',
                'c' => 'Capital Allocation Pricing Method',
                'd' => 'Capital Asset Performance Measurement',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "hedge fund" strategy?',
                'a' => 'An investment fund that uses various strategies to earn active return for its investors',
                'b' => 'A fund that invests only in government securities',
                'c' => 'A fund focused on short-term, high-risk investments',
                'd' => 'A fund that provides loans to startups',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "systematic risk"?',
                'a' => 'The risk inherent to the entire market or market segment',
                'b' => 'The risk associated with a specific company or industry',
                'c' => 'The risk of changes in interest rates',
                'd' => 'The risk from fluctuations in foreign exchange rates',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "EVA" stand for in financial analysis?',
                'a' => 'Economic Value Added',
                'b' => 'Equity Value Assessment',
                'c' => 'Enterprise Value Analysis',
                'd' => 'Estimated Value of Assets',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "Monte Carlo simulation" used for in finance?',
                'a' => 'A method used to model the probability of different outcomes in a process that cannot easily be predicted',
                'b' => 'A technique to forecast future stock prices',
                'c' => 'A way to calculate the value of derivatives',
                'd' => 'A strategy to optimize portfolio returns',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "arbitrage pricing theory" (APT)?',
                'a' => 'A theory that estimates the return of an asset based on its sensitivity to various macroeconomic factors',
                'b' => 'A model that predicts future price movements based on historical data',
                'c' => 'A method to value fixed-income securities',
                'd' => 'A strategy to manage investment risk through diversification',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        // Business and Finance - Finance Questions (Advanced)
        
            [
                'field_id' => 16,
                               'question' => 'What is "arbitrage" in finance?',
                'a' => 'The practice of buying and selling assets in different markets to exploit price differences',
                'b' => 'The technique of predicting future market trends',
                'c' => 'The process of assessing a company’s creditworthiness',
                'd' => 'The method of increasing leverage to maximize returns',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "beta" measure in finance?',
                'a' => 'The expected return on a stock',
                'b' => 'The market capitalization of a company',
                'c' => 'The volatility of a stock relative to the overall market',
                'd' => 'The dividend yield of a stock',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "Value at Risk" (VaR)?',
                'a' => 'A metric to assess a company’s profitability',
                'b' => 'A statistical measure of the risk of loss for investments',
                'c' => 'A technique for evaluating bond prices',
                'd' => 'A method to calculate the future value of an investment',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "duration" in bond investing?',
                'a' => 'The bond’s annual coupon payment',
                'b' => 'The difference between the bond’s face value and market price',
                'c' => 'The total time until a bond matures',
                'd' => 'A measure of a bond’s sensitivity to interest rate changes',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "CAPM" stand for in finance?',
                'a' => 'Capital Allocation Pricing Method',
                'b' => 'Capital Asset Performance Measurement',
                'c' => 'Capital Asset Pricing Model',
                'd' => 'Capital Accumulation Pricing Model',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "hedge fund" strategy?',
                'a' => 'A fund that provides loans to startups',
                'b' => 'A fund focused on short-term, high-risk investments',
                'c' => 'An investment fund that uses various strategies to earn active return for its investors',
                'd' => 'A fund that invests only in government securities',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "systematic risk"?',
                'a' => 'The risk from fluctuations in foreign exchange rates',
                'b' => 'The risk associated with a specific company or industry',
                'c' => 'The risk of changes in interest rates',
                'd' => 'The risk inherent to the entire market or market segment',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "EVA" stand for in financial analysis?',
                'a' => 'Enterprise Value Analysis',
                'b' => 'Estimated Value of Assets',
                'c' => 'Economic Value Added',
                'd' => 'Equity Value Assessment',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "Monte Carlo simulation" used for in finance?',
                'a' => 'A technique to optimize portfolio returns',
                'b' => 'A way to calculate the value of derivatives',
                'c' => 'A method used to model the probability of different outcomes in a process that cannot easily be predicted',
                'd' => 'A strategy to forecast future stock prices',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "arbitrage pricing theory" (APT)?',
                'a' => 'A strategy to manage investment risk through diversification',
                'b' => 'A model that predicts future price movements based on historical data',
                'c' => 'A theory that estimates the return of an asset based on its sensitivity to various macroeconomic factors',
                'd' => 'A method to value fixed-income securities',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        // Business and Finance - Finance Questions (Advanced)
        
            [
                'field_id' => 16,
                               'question' => 'What is "arbitrage" in financial markets?',
                'a' => 'Buying and holding assets to benefit from dividends',
                'b' => 'The process of diversifying investments to reduce risk',
                'c' => 'The use of short-term debt to finance long-term projects',
                'd' => 'Buying and selling assets in different markets to profit from price differences',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "liquidity risk" refer to?',
                'a' => 'The risk of fluctuations in exchange rates affecting profitability',
                'b' => 'The risk of not being able to convert an asset into cash quickly without a significant loss',
                'c' => 'The risk associated with changes in interest rates',
                'd' => 'The risk of a company failing to meet its debt obligations',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "leverage" in finance?',
                'a' => 'The process of diversifying investments to reduce risk',
                'b' => 'Using borrowed capital to increase the potential return on investment',
                'c' => 'Investing in low-risk government securities',
                'd' => 'The allocation of funds into low-risk government bonds',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "duration" measure in fixed-income securities?',
                'a' => 'The total return of the bond over its lifetime',
                'b' => 'The frequency of coupon payments',
                'c' => 'The time until the bond matures',
                'd' => 'The sensitivity of the bond’s price to changes in interest rates',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "capital budgeting"?',
                'a' => 'The process of managing day-to-day operational costs',
                'b' => 'The process of issuing new equity shares',
                'c' => 'The process of evaluating short-term financing options',
                'd' => 'The process of planning and managing a company’s long-term investments',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is a "mutual fund"?',
                'a' => 'A type of insurance policy for investors',
                'b' => 'A contract that guarantees a fixed return on investment',
                'c' => 'A type of bond issued by governments',
                'd' => 'An investment vehicle that pools funds from many investors to purchase securities',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What does "dividend yield" measure?',
                'a' => 'The percentage of earnings paid out as dividends',
                'b' => 'The rate of growth of dividends over time',
                'c' => 'The total return on an investment over a year',
                'd' => 'The annual dividend payment divided by the stock’s price',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "systematic risk"?',
                'a' => 'The risk associated with the potential for default on debt',
                'b' => 'The risk from individual investment choices',
                'c' => 'The risk of changes in government regulations',
                'd' => 'The risk inherent to the entire market or market segment',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "economic value added" (EVA)?',
                'a' => 'A measure of a company’s market share',
                'b' => 'A measure of a company’s operational efficiency',
                'c' => 'A measure of a company’s revenue growth',
                'd' => 'A measure of a company’s financial performance based on residual wealth',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 16,
                               'question' => 'What is "interest rate risk"?',
                'a' => 'The risk of liquidity constraints in the market',
                'b' => 'The risk of changes in interest rates affecting the value of fixed-income securities',
                'c' => 'The risk of fluctuations in currency exchange rates',
                'd' => 'The risk associated with the potential for default on debt',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        
        ];



        DB::table('questions')->insert($questions);
        
        
    }
}